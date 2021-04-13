function myReset() {
  document.getElementById("blogEntry").reset();
}

const topic = document.getElementById("topic")
const comment = document.getElementById("comment")
const blogEntry = document.getElementById("blogEntry")
const errorElement = document.getElementById("error")

blogEntry.addEventListener("submit",(e) => {
  let messages = []
  if (topic.value === "" || topic.value == null) {
    messages.push("Topic is missing")
    document.getElementById("topic").style.backgroundColor= "#ff7a7a";
  }
  if (comment.value === "" || comment.value == null) {
    messages.push("Comment is missing")
    document.getElementById("comment").style.backgroundColor= "#ff7a7a";
  }
  if (comment.value.length >=200){
    messages.push("Maximum character limit is 200")
  }
  if (messages.length > 0){
  e.preventDefault()
  errorElement.innerText = messages.join(", ")
  }
})

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
