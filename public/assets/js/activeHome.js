window.onload = () => {
    let activeDishHome = document.querySelectorAll("[type=checkbox]")
    for(let button of activeDishHome){
        button.addEventListener("click", function(){
            let xmlhttp = new XMLHttpRequest;

            xmlhttp.open("get", `/manager/dish/activeHome/${this.dataset.id}`)
            xmlhttp.send()
        })
    }
}