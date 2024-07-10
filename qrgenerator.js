const input = document.querySelector("input");
const generatebtn = document.querySelector("#generate"); 
const downloadbtn = document.querySelector("#download");

let imgBox = document.getElementById("imgBox");
let qrImage = document.getElementById("qrImage");
let qrText = document.getElementById("qrText");



function generateQR(){
    if(qrText.value.length > 0){
        qrImage.src = " https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;
        imgBox.classList.add("show-img");
    } else{
        qrText.classList.add('error');
        setTimeout(()=>{
            qrText.classList.remove('error');
        }, 1000);
    }
} 



        downloadbtn.addEventListener("click", async () => {
            const response = await fetch(qrImage.src.replace("150x150", "300x300"));
            const blob = await response.blob();
            const downloadLink = document.createElement("a");
            downloadLink.href = URL.createObjectURL(blob);
            downloadLink.download = "qrImage.jpg";
            downloadLink.click();
        });