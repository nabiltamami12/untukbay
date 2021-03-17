importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js');

   var firebaseConfig = {
    apiKey: "AIzaSyDvl8kzNuuN14XiVz-aVIwTLOWE1giZ38o",
    authDomain: "panab-9f5bd.firebaseapp.com",
    databaseURL: "https://panab-9f5bd.firebaseio.com",
    projectId: "panab-9f5bd",
    storageBucket: "panab-9f5bd.appspot.com",
    messagingSenderId: "345415351251",
    appId: "1:345415351251:web:150b5082050b7892718d26",
    measurementId: "G-BJJS7B548S"
  };
  firebase.initializeApp(firebaseConfig);
  const messaging = firebase.messaging();
  messaging.setBackgroundMessageHandler(function (payload) {
    console.log(payload)
  })

