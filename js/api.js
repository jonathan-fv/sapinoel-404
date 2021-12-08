fetch('http://localhost:8000/api.php/product/6')
    .then((response) => {
        return response.json()
    })
    .then((json) => {
        addElement(json)
        console.log(json)
    })


    const container = document.getElementById("container")

    function addElement(json){
        let b = document.createElement("div")
        let pname = document.createElement("p")
        pname.innerHTML = json.name
        let pdesc = document.createElement("p")
        pdesc.innerHTML = json.description
        let pprix = document.createElement("p")
        pprix.innerHTML = json.prix
        let ptaille = document.createElement("p")
        ptaille.innerHTML = json.taille
        let pcat = document.createElement("p")
        pcat.innerHTML = json.categorie
        container.appendChild(b)
        b.appendChild(pname)
        b.appendChild(pdesc)
        b.appendChild(pprix)
        b.appendChild(ptaille)
        b.appendChild(pcat)
    }
    addElement()
