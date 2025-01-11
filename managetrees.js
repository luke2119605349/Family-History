// Make XHR request to get trees when page loads
function loadtrees() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "displaytrees.php");
    xhr.onload = () => {
        let treetable = document.getElementById("treetablebody");
        let trees = JSON.parse(xhr.responseText);
        for (let tree of trees) {
            let tr = document.createElement("tr");
            let title = document.createElement("td");
            let root_change = document.createElement("td");
            let edit_name = document.createElement("td");
            
            let treeform = document.createElement("form");
            treeform.classList.add("additem");
            treeform.method = "POST";
            treeform.action = "./viewtree.php";
            
            let input = document.createElement("input");
            input.classList.add("button");
            input.type = "submit";
            input.value = tree[1];
            
            // let treetoload = document.createElement("input");
            // treetoload.classList.add("")
    
            tr.id = tree[0];
            title.innerText = tree[1];
            root_change.innerText = tree[2];
            edit_name.innerText = "Edit name";
    
            tr.appendChild(title);
            tr.appendChild(edit_name);
            tr.appendChild(root_change);
            treetable.appendChild(tr);
        }
    }
    xhr.send();
}

function all() {
    loadtrees();
    // e.override default on submit button to check for everything
}

window.onload = all;