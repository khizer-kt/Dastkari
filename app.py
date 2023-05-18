import mysql.connector
from flask import Flask, request, redirect
from googletrans import Translator

app = Flask(__name__)

mydb = mysql.connector.connect(
  host="127.0.0.1",
  user="root",
  password="root123",
  database="e_commerce",
  port="3306",
  connect_timeout=1000
)
@app.route('/', methods=['GET', 'POST'])
def search():
    if request.method == 'POST':
        search_query = request.form['search_query']
        translator = Translator()
        detected_lang = translator.detect(search_query)
        if translator.detect(search_query).lang == 'ur':
            search_query_english = translator.translate(search_query, dest='en').text
            mycursor = mydb.cursor()
            sql = "SELECT * FROM products WHERE name LIKE %s OR name LIKE %s"
            #writing a second query so that i can redirect to the category pages

            val = ("%" + search_query + "%", "%" + search_query_english + "%")
            mycursor.execute(sql, val)
            results = mycursor.fetchall()
            a=results[0]
            b=a[1]
            print(b)
            print(type(b))
            if results:
                output = "<h2>Search Results</h2>"
                for row in results:
                    output += "<p>" + row[1] + " - Found</p>"
                    cat = row[7]
                    print(cat)
                    # print(type(cat))
                    print("Something is being called")
                    print(f"http://127.0.0.1:8000/guestView/{cat}/{b}")
                return redirect(f"http://127.0.0.1:8000/guestView/{cat}/{b}", code=302)

                #return output
            
            else:
                print()
                return redirect("http://127.0.0.1:8000/", code=302) 
        elif translator.detect(search_query).lang == 'en':
            search_query_urdu = translator.translate(search_query, dest='ur').text
            mycursor = mydb.cursor()
            sql = "SELECT * FROM products WHERE name LIKE %s OR name LIKE %s"
            val = ("%" + search_query + "%", "%" + search_query_urdu + "%")
            mycursor.execute(sql, val)
            results = mycursor.fetchall()
            print("--------------------------")
            a=results[0]
            b=a[1]
            print(b)
            print(type(b))
            print("------------------")
            if results:
                output = '''
    <h2>Heading</h2>
    <h1>Bigger Heading</>
'''
                for row in results:
                    output += "<p>" + row[1] + " - Found</p>"
                    cat = row[7]
                    # print(cat)
                    # print(type(cat))
                    print(f"http://127.0.0.1:8000/guestView/{cat}/{b}")
                return redirect(f"http://127.0.0.1:8000/guestView/{cat}/{b}", code=302)

                #return output
            else:
                print()
                return redirect("http://127.0.0.1:8000/", code=302) 
        else:
            return "<p>Error: Unable to detect language. Please enter a valid query.</p>"
    else:
        return '''
        <h1>Something</h1>
            <form method="POST">
            <h1>app</h1>
                <label for="search_query">Search Query:</label>
                <input type="text" id="search_query" name="search_query">
                <br><br>
                <button type="submit" name="search_item">Search</button>
            </form>
        '''


@app.errorhandler(TypeError)
def handle_type_error(error):
    return redirect(f"http://127.0.0.1:8000")

if __name__ == '__main__':
    app.run(debug=True)
