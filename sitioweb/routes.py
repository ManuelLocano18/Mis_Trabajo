from flask import render_template, flash, redirect, url_for, request
from sitioweb import app, db, bcrypt
from sitioweb.forms import RegistrationForm, LoginForm
from sitioweb.models import Registroa
from flask_login import login_user, current_user, logout_user, login_required

@app.route('/')
@app.route('/home')
def home():
    return render_template("home.html")

@app.route('/about')
def about():
    return render_template("about.html", title='Acerca de nosotros')

@app.route("/register", methods=['GET', 'POST'])
def register():
    if current_user.is_authenticated:
        return redirect(url_for('home'))
    form = RegistrationForm()
    if form.validate_on_submit():
        hashed_password = bcrypt.generate_password_hash(form.password.data).decode('utf-8')
        alumno = Registroa(nombre=form.nombre.data, correo_institucional=form.correo_institucional.data, password=hashed_password)
        db.session.add(alumno)
        db.session.commit()
        flash('¡Tu cuenta ha sido creada! Ya puedes iniciar sesión', 'success')
        return redirect(url_for('login'))
    return render_template('register.html', title='Registro', form=form)

@app.route('/login', methods=['GET', 'POST'])
def login():
    if current_user.is_authenticated:
        return redirect(url_for('home'))
    form = LoginForm()
    if form.validate_on_submit():
        alumno = Registroa.query.filter_by(correo_institucional=form.correo_institucional.data).first()
        if alumno and bcrypt.check_password_hash(alumno.password, form.password.data):
            login_user(alumno)
            paginas = request.args.get('next')
            return redirect(paginas) if paginas else redirect(url_for('home'))
        else:
            flash('No se pudo iniciar sesión. Verifica tu correo o contraseña', 'danger')
    return render_template('login.html', title='Inicio de Sesión', form=form)

@app.route('/Lista')
@login_required
def lista():
    return render_template("listainsti.html", title='Lista')

@app.route('/Conauno')
@login_required
def conauno():
    return render_template("conauno.html", title='Cona1')

@app.route('/logout')
def logout():
    logout_user()
    return redirect(url_for('home'))
