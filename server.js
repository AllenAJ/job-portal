// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyDeefB6C_s9FGQBpBhjY2eCJakeAle0Tq4",
  authDomain: "job-portal-dfde4.firebaseapp.com",
  projectId: "job-portal-dfde4",
  storageBucket: "job-portal-dfde4.appspot.com",
  messagingSenderId: "138010056271",
  appId: "1:138010056271:web:99834803152eff3b6bfc3a",
  measurementId: "G-7NMJXNFR1R",
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
// Initialize variables
const auth = firebase.auth();
const database = firebase.database();

// Set up our register function
function register() {
  // Get all our input fields
  fname = document.getElementById("fname").value;
  lname = document.getElementById("lname").value;
  email = document.getElementById("email2").value;
  password = document.getElementById("password2").value;
  ph_no = document.getElementById("ph_no").value;
  usertype = document.querySelector("input[name = usertype]:checked").value;
  console.log(fname);
  alert("registered!");
  // Move on with Auth
  auth
    .createUserWithEmailAndPassword(email, password)
    .then(function () {
      // Declare user variable
      var user = auth.currentUser;

      // Add this user to Firebase Database
      var database_ref = database.ref();

      // Create User data
      var user_data = {
        email: email,
        fname: fname,
        lname: lname,
        ph_no: ph_no,
        usertype: usertype,
        last_login: Date.now(),
      };
      console.log(user_data);

      // Push to Firebase Database
      database_ref.child("users/" + user.uid).set(user_data);

      // DOne
      alert("User Created!!");
    })
    .catch(function (error) {
      // Firebase will use this to alert of its errors
      var error_code = error.code;
      var error_message = error.message;

      alert(error_message);
    });
}

function login() {
  // Get all our input fields
  email = document.getElementById("email1").value;
  password = document.getElementById("password1").value;

  auth
    .signInWithEmailAndPassword(email, password)
    .then(function () {
      // Declare user variable
      var user = auth.currentUser;
      // Add this user to Firebase Database
      var database_ref = database.ref();
      // Create User data
      var user_data = {
        last_login: Date.now(),
      };
      // Push to Firebase Database
      database_ref.child("users/" + user.uid).update(user_data);
      // DOne
      alert("User Logged In!!");
      //location.href = 'settings.html';
      console.log(email);
    })
    .catch(function (error) {
      // Firebase will use this to alert of its errors
      var error_code = error.code;
      var error_message = error.message;
      alert(error_message);
    });
}

function showSettings() {
  console.log('called');
  setTimeout(function () {
    // Declare user variable
    var user = auth.currentUser;

    // Add this user to Firebase Database
    var database_ref = database.ref();
    console.log(user.uid);
    database_ref.child("users/" + user.uid).on("value", function (snapshot) {
      console.log(
        snapshot.val().email,
        snapshot.val().fname,
        snapshot.val().lname,
        snapshot.val().ph_no,
        snapshot.val().usertype
      );
      document.getElementById("fname").value = snapshot.val().fname;
      document.getElementById("lname").value = snapshot.val().lname;
      document.getElementById("email").value = snapshot.val().email;
      document.getElementById("ph_no").value = snapshot.val().ph_no;
      document.getElementById("user_type").value = snapshot.val().usertype;
    });
  }, 5000);
}

function updateCh() {
  var user = auth.currentUser;
  var database_ref = database.ref();

  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var ph_no = document.getElementById("ph_no").value;

  var user_data = {
    fname: fname,
    lname: lname,
    ph_no: ph_no,
  };
  database_ref.child("users/" + user.uid).update(user_data);

  alert("Updated");
}

function signOut() {
  auth
    .signOut()

    .then(function () {
      //signed out Successfully
      alert("signed out");
      location.href = "login.html";
    })

    .catch(function (error) {
      //If an error occurs
      var error_code = error.code;
      var error_message = error.message;
    });
}

function refresh()   {
  window.location.href = 'settings.html';
  //showSettings();
}