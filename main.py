from flask import Flask, render_template, request, json, jsonify, redirect, session, url_for
app = Flask(__name__)

@app.route('/')
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


app.run(host="127.0.0.1", port=8080, debug=True)