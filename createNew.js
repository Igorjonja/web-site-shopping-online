function myFunction() {
    var node = document.createElement("li");
    var textnode = document.createTextNode("Element");
    node.appendChild(textnode);
    document.getElementById("myList").appendChild(node);
    node.className = "list-group-item";
}