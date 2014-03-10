from flask import Flask
from flask import request
from flask import render_template
from flask.ext.sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///mymusic.db'
db = SQLAlchemy(app)


class User(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(80), unique=True)
    email = db.Column(db.String(120), unique=True)

    def __init__(self, username, email):
        self.username = username
        self.email = email

    def __repr__(self):
    	return "User:%s, Email:%s" % (str(self.username), str(self.email))


@app.route('/users')
def users():
	return render_template('users.html', users=User.query.all())
	#return str(User.query.all())

app.debug = True
app.run()