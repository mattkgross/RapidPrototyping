from flask import Flask
from flask import request
from flask import render_template

import datetime
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from setup import Contact

app = Flask(__name__)

@app.route('/contact')
def contact():
	return render_template('contact.html')

@app.route('/contact/request', methods=["POST"])
def contact_request():
	if request.method == "POST":
		engine = create_engine('sqlite:///contact.db', echo=True)
 
		# Create a Session
		Session = sessionmaker(bind=engine)
		session = Session()

		new_contact = Contact(request.json['f_name'],
					          request.json['l_name'],
					          request.json['email'],
					          request.json['message'])

		# Add the record to the session object
		session.add(new_contact)
		# commit the record the database
		session.commit()

		#return str(request.json)
		return "Success!"

app.debug = True
app.run()



#from flask import Flask
#from flask import request
#from flask import render_template
#from flask.ext.sqlalchemy import SQLAlchemy
#from sqlalchemy import Column, Date, Integer, String
#
#app = Flask(__name__)
#app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///contact.db'
#db = SQLAlchemy(app)
#
#
#class Contact(db.Model): 
#    id = Column(Integer, primary_key=True)
#    f_name = Column(String)
#    l_name = Column(String)
#    email = Column(String)
#    message = Column(String)
#
#    def __init__(self, f_name, l_name, email, message):
#        self.f_name = f_name
#        self.l_name = l_name
#        self.email = email
#        self.message = message
#
#    def __repr__(self):
#		return "First Name: %s, Last Name: %s, Email: %s, Message: %s" % (self.f_name, self.l_name, self.email, self.message)
#
#
#@app.route('/contact')
#def contact():
#	return render_template('contact.html')
#
#@app.route('/contact/request', methods=["POST"])
#def contact_request():
#	if request.method == "POST":
#		new_contact = Contact(request.json['f_name'],
#					          request.json['l_name'],
#					          request.json['email'],
#					          request.json['message'])
#
#		# Add the record to the session object
#		db.session.add(new_contact)
#		# commit the record the database
#		#db.session.commit()
#
#		#return str(request.json)
#
#app.debug = True
#app.run()