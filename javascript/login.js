const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".submit input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();

}
continueBtn.onclick = () => {
    // console.log("kont")

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent=data;
                    errorText.style.display='block';
                    
                }
                
            }
        }

    }
    let formData = new FormData(form);

    xhr.send(formData);
    
}