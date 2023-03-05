window.onload = () => {
    let deleteUser = document.querySelectorAll(".modal-trigger")
    for(let button of deleteUser) {
        button.addEventListener("click", function(){
            document.querySelector(".modal-footer a").href=`/admin/user/delete/${this.dataset.id}`
            document.querySelector(".modal-body").innerText = `Etes-vous sûr de vouloir supprimer cet utilisateur"${this.dataset.id}"`
        })
    }
}