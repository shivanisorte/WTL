const btn = document.getElementById("next");
var img = document.getElementById("img");
var imgs = new Array();
var curr = 0;
imgs[0] = "https://images.unsplash.com/photo-1646505183416-f3301d2a8127?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80";
imgs[1] = "https://images.unsplash.com/photo-1646504543960-0945dc17362d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80";
imgs[2] = "https://images.unsplash.com/photo-1646442412837-bd9683f90f93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80";
imgs[3] = "https://images.unsplash.com/photo-1646473322803-94253d1dcbff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80";
imgs[4] = "https://images.unsplash.com/photo-1646428792927-ec1ddd480cd4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80";

btn.addEventListener("click", function () {
  console.log("clicked");
  if (curr == imgs.length-1) {
    curr = 0;
    img.setAttribute("src", imgs[curr]);
  } else {
    curr++;
    img.setAttribute("src", imgs[curr]);
  }
});
