from flask import Flask, render_template, request, json, jsonify, redirect, session, url_for
app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/index')
def index():
    return render_template('index.html')

@app.route('/listings')
def listings():
    return render_template('listings.html')

@app.route('/login')
def login():
    return render_template('login.html')

@app.route('/register')
def register():
    return render_template('register.html')

@app.route('/bill')
def bill():
    return render_template('bill.html')

@app.route('/listings_view')
def listings_view():
    return render_template('listings_view.html')

@app.route('/profile')
def profile():
    return render_template('profile.html')

@app.route('/about')
def about():
    return render_template('about.html')

app.run(host="127.0.0.1", port=8080, debug=True)