// const uploadField = document.querySelector(".form input[type='file']"),
uploadFile = document.querySelector(".form .field span");
fileSelector = document.getElementById('file-selector');
fileSelected = document.getElementById('file-selected');

function upload(fakepath){
  var splits = fakepath.split('fakepath\\');
  console.log(splits[1]);
  fileSelected.innerHTML = splits[1];
}

