// jQuery(function($){
//     $(document).ajaxSend(function() {
//         $("#overlay").fadeIn(300);
//     });
//
//     $('#loadbutton').click(function(){
//         $.ajax({
//             type: 'GET',
//             success: function(data){
//                 console.log(data);
//             }
//         }).done(function() {
//             setTimeout(function(){
//                 $("#overlay").fadeOut(300);
//             },500);
//         });
//     });
// });
//
// let fetchBtn = document.getElementById("fetchBtn");
//
//
// fetchBtn.addEventListener("click", buttonclickhandler);
//
// function buttonclickhandler() {
//
//     // Instantiate an new XHR Object
//     const xhr = new XMLHttpRequest();
//
//     // Open an obejct (GET/POST, PATH,
//     // ASYN-TRUE/FALSE)
//     xhr.open("GET",
//         "https://api.meteo.lt/v1/places", true);
//
//
//
//
//     // When response is ready
//     xhr.onload = function () {
//         if (this.status === 200) {
//
//             // Changing string data into JSON Object
//             obj = JSON.parse(this.responseText);
//
//             // Getting the ul element
//             let list = document.getElementById("list");
//             str = ""
//             for (key in obj.data) {
//                 str += `<li>${obj.data[key].employee_name}</li>`;
//             }
//             list.innerHTML = str;
//         }
//         else {
//             console.log("File not found");
//         }
//     }
//
//     // At last send the request
//     xhr.send();
// }


// Define our button click listener
// const xhr = new XMLHttpRequest();
// xhr.open('POST', 'https://api.meteo.lt/v1/places');
// xhr.setRequestHeader('X-PINGOTHER', 'pingpong');
// xhr.setRequestHeader('Content-Type', 'application/xml');
//
// function handler() {
//
// }
//
// xhr.onreadystatechange = handler;
// xhr.send('<person><name>Arun</name></person>');

// fetch('https://api.meteo.lt/v1/places', {
//     method: 'POST',
//     headers: { 'Content-Type': 'application/json'}
// });


// fetch('http://dummy.restapiexample.com/api/v1/employees')
//     .then(response => response.json())
//     .then(data =>{
//         let users = document.getElementById('users')
//         let output = '';
//         for(let i in data){
//             output +=
//                 `<div class='user'>
//       <img src= "${data[i].avatar_url}" />
//       <ul>
//       <li>id: ${data[i].id}</li>
//       <li>login: ${data[i].login}</li>
//       </ul>
//       </div>`
//             users.innerHTML = output
//         }
//
//     })

$(window).on('load', function () {
    $("#cover").fadeOut(1750);
});
