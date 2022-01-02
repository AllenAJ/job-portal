// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
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

// Your web app's Firebase configuration
const auth = firebase.auth();
const database = firebase.database();

function signUp() {
  var email = document.getElementById("email1");
  var password = document.getElementById("password1");
  //alert(email1 + password1)
  const promise = auth.createUserWithEmailAndPassword(
    email.value,
    password.value
  );
  promise.catch((e) => alert(e.message));
  alert("Signed Up");
}
