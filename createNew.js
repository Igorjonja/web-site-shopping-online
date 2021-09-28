function myFunction() {
    var node = document.createElement("li");

    var textarea = document.getElementById("textarea").value;
    var textnode = document.createTextNode(textarea);

    node.appendChild(textnode);
    document.getElementById("myList").appendChild(node);
    node.className = "list-group-item";


}