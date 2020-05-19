from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask_bcrypt import Bcrypt
from flask_login import LoginManager

app = Flask(__name__)

app.config['SECRET_KEY'] = '8f3bfa1831c645a1013fd4b1dbb5aa88'
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql://manuel:m@nuelchiv@s111*@localhost/servs'
db = SQLAlchemy(app)
bcrypt = Bcrypt(app)
login_manager = LoginManager(app)
login_manager.login_view = 'login'
login_manager.login_message = u'Por favor inicia sesión antes de continuar'

from sitioweb import routes