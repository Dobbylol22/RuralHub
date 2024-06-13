from flask import Flask ,render_template,redirect,url_for,request,flash
#from db_setup import Owner,Item,Base
from sqlalchemy import create_engine
from sqlalchemy.orm import (sessionmaker,scoped_session)
from flask import session as login_session
from functools import wraps

app = Flask(__name__)
@app.route('/')
def home():
	return render_template('home.html')
