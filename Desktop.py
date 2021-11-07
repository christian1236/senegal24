from PyQt5.QtWidgets import QApplication, QTableWidget, QHeaderView, QTableWidgetItem, QMessageBox, QHBoxLayout, QMainWindow, QLineEdit, QPushButton, QLabel, QVBoxLayout, QWidget, QGridLayout
from PyQt5.QtGui import QPixmap
from PyQt5.QtCore import Qt
from PyQt5.QtWidgets import *
import sys


class AdminWindow(QWidget):

    def __init__(self):
        super().__init__()
        self.w = None
        self.s = None
        self.setWindowTitle('Pages Dactualités')
        self.resize(500, 500)
        self.setAutoFillBackground(True)
        p = self.palette()
        p.setColor(self.backgroundRole(), Qt.gray)
        self.setPalette(p)
        layout = QGridLayout()

        self.add_user = QPushButton("Ajouter Utilisateur ")
        self.add_user.clicked.connect(self.show_add_user)
        layout.addWidget(self.add_user, 0, 1)
        layout.setRowMinimumHeight(4, 75)

        self.list_user = QPushButton("Lister Utilisateur ")
        self.list_user.clicked.connect(self.show_list_user)
        layout.addWidget(self.list_user, 0, 2)
        layout.setRowMinimumHeight(4, 75)

        self.quit = QPushButton("Quitter ")
        self.quit.clicked.connect(self.show_quit)
        layout.addWidget(self.quit, 2, 1)
        layout.setRowMinimumHeight(4, 75)
        self.setLayout(layout)

    def show_add_user(self, checked):
        if self.w is None:
            self.w = Add_User()
        self.w.show()

    def show_list_user(self, checked):
        if self.s is None:
            self.s = List_User()
        self.s.show()

    def show_quit(self, checked):
        msg = QMessageBox()
        msg.setText(' Quitter')
        msg.exec_()
        app.quit()


class MainWindow(QWidget):

    def __init__(self):
        super().__init__()
        self.w = None

        self.setWindowTitle('Pages Dactualités')
        self.resize(300, 300)
        self.setAutoFillBackground(True)
        p = self.palette()
        p.setColor(self.backgroundRole(), Qt.gray)
        self.setPalette(p)
        layout = QGridLayout()

        label = QLabel()
        pixmap = QPixmap('./logo2.png')
        pixmap = pixmap.scaled(50, 50)
        label.setPixmap(pixmap)
        layout.addWidget(label, 0, 0)
        label.setAlignment(Qt.AlignCenter)

        label_name = QLabel('<font size="5"> Login </font>')
        self.lineEdit_username = QLineEdit()
        self.lineEdit_username.setPlaceholderText('Entrez votre login')
        layout.addWidget(label_name, 1, 0)
        layout.addWidget(self.lineEdit_username, 2, 0)

        label_password = QLabel('<font size="5"> Mot de passe </font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('Votre mot de passe ')
        layout.addWidget(label_password, 3, 0)
        layout.addWidget(self.lineEdit_password, 4, 0)

        button_login = QPushButton('Connexion')
        button_login.clicked.connect(self.show_new_window)

        layout.addWidget(button_login, 5, 0)
        layout.setRowMinimumHeight(5, 75)

        self.setLayout(layout)

    def show_new_window(self, checked):
        msg = QMessageBox()
        if self.lineEdit_username.text() == 'admin' and self.lineEdit_password.text() == 'admin':
            if self.w is None:
                self.w = AdminWindow()
            self.w.show()
        else:
            msg.setText('Incorrect Password')
            msg.exec_()


class Add_User(QWidget):
    def __init__(self):
        super().__init__()
        self.w = None
        self.setWindowTitle('Pages Dactualités')
        self.resize(500, 500)
        self.setAutoFillBackground(True)
        p = self.palette()
        p.setColor(self.backgroundRole(), Qt.gray)
        self.setPalette(p)
        layout = QGridLayout()

        label = QLabel()
        pixmap = QPixmap('./ajout.jpeg')
        pixmap = pixmap.scaled(70, 70)
        label.setPixmap(pixmap)
        layout.addWidget(label, 0, 1)
        label.setAlignment(Qt.AlignCenter)

        label_name = QLabel('<font size="4"> nom</font>')
        self.lineEdit_username = QLineEdit()
        self.lineEdit_username.setPlaceholderText('nom')
        layout.addWidget(label_name, 1, 0)
        layout.addWidget(self.lineEdit_username, 1, 1)

        label_password = QLabel(
            '<font size="4"> prenom</font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('prenom  ')
        layout.addWidget(label_password, 2, 0)
        layout.addWidget(self.lineEdit_password, 2, 1)

        label_password = QLabel(
            '<font size="4"> adresse</font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('adresse')
        layout.addWidget(label_password, 3, 0)
        layout.addWidget(self.lineEdit_password, 3, 1)

        label_password = QLabel(
            '<font size="4"> matricule</font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('matricule')
        layout.addWidget(label_password, 4, 0)
        layout.addWidget(self.lineEdit_password, 4, 1)

        label_password = QLabel(
            '<font size="4"> Telephone</font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('Telephone')
        layout.addWidget(label_password, 5, 0)
        layout.addWidget(self.lineEdit_password, 5, 1)

        label_password = QLabel(
            '<font size="4"> Login</font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('Login')
        layout.addWidget(label_password, 6, 0)
        layout.addWidget(self.lineEdit_password, 6, 1)

        label_password = QLabel(
            '<font size="4"> Mot de passe </font>')
        self.lineEdit_password = QLineEdit()
        self.lineEdit_password.setPlaceholderText('Mot de passe ')
        layout.addWidget(label_password, 7, 0)
        layout.addWidget(self.lineEdit_password, 7, 1)

        button_add_user = QPushButton('Ajouter User')
        button_add_user.clicked.connect(self.show_add_user)

        layout.addWidget(button_add_user, 10, 1)
        layout.setRowMinimumHeight(8, 75)

        button_quit = QPushButton('Quitter')
        button_quit.clicked.connect(self.show_quit)

        layout.addWidget(button_quit, 11, 1)
        layout.setRowMinimumHeight(8, 75)

        self.setLayout(layout)

    def show_quit(self, checked):
        app.quit()

    def show_add_user(self, checked):
        msg = QMessageBox()
        msg.setText(' Ajoute avec Success')
        msg.exec_()
        app.quit()


class List_User(QWidget):
    def __init__(self):
        super().__init__()
        self.w = None

        self.setWindowTitle('Pages Dactualités')
        self.resize(500, 500)
        self.setAutoFillBackground(True)
        p = self.palette()
        p.setColor(self.backgroundRole(), Qt.gray)
        self.setPalette(p)

        self.createTable()

        self.layout = QVBoxLayout()
        self.layout.addWidget(self.tableWidget)
        self.setLayout(self.layout)

        self.show()

    def createTable(self):
        self.tableWidget = QTableWidget()

        self.tableWidget.setRowCount(4)

        self.tableWidget.setColumnCount(3)

        self.tableWidget.setItem(0, 0, QTableWidgetItem("matricule"))
        self.tableWidget.setItem(0, 1, QTableWidgetItem("Login"))
        self.tableWidget.setItem(0, 2, QTableWidgetItem("password"))
        self.tableWidget.setItem(1, 0, QTableWidgetItem("bara22"))
        self.tableWidget.setItem(1, 1, QTableWidgetItem("bara"))
        self.tableWidget.setItem(1, 2, QTableWidgetItem("passer"))
        self.tableWidget.setItem(2, 0, QTableWidgetItem("cheikh12345"))
        self.tableWidget.setItem(2, 1, QTableWidgetItem("cheikh"))
        self.tableWidget.setItem(2, 2, QTableWidgetItem("passer"))
        self.tableWidget.setItem(3, 0, QTableWidgetItem("Chris22"))
        self.tableWidget.setItem(3, 1, QTableWidgetItem("chris"))
        self.tableWidget.setItem(3, 2, QTableWidgetItem("passer"))

        self.tableWidget.horizontalHeader().setStretchLastSection(True)
        self.tableWidget.horizontalHeader().setSectionResizeMode(QHeaderView.Stretch)


app = QApplication(sys.argv)
w = MainWindow()
w.show()
app.exec()
