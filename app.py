from flask import Flask, render_template
app = Flask(__name__)

@app.route('/home')
@app.route('/')
def index():
    return render_template('index.html')
    
@app.route('/contact')
@app.route('/')
def contact():
    return render_template('contact.html')

if __name__ =='_main_':
    app.run(debug=True)

#python -m flask run --command to render the page on your browser
#pipenv shell ---activates the virtual environment
#pipenv install flask
#>>> exit() to quit python on the terminal