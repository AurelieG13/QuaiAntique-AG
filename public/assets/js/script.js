window.onload = () => {
    let deleteUser = document.querySelectorAll(".modal-trigger")
    for(let button of deleteUser) {
        button.addEventListener("click", function(){
            document.querySelector(".modal-footer a").href=`/admin/user/delete/${this.dataset.id}`
            document.querySelector(".modal-body").innerText = `Etes-vous sûr de vouloir supprimer cet utilisateur"${this.dataset.id}"`
        })
    }
}

window.onload = () => {
    let deleteDish = document.querySelectorAll(".modal-trigger-dish")
    for(let button of deleteDish) {
        button.addEventListener("click", function(){
            document.querySelector(".modal-footer-dish a").href=`/admin/dish/delete/${this.dataset.id}`
            document.querySelector(".modal-body-dish").innerText = `Etes-vous sûr de vouloir supprimer ce plat"${this.dataset.id}"`
        })
    }
}

window.onload = () => {
    let deleteCategory = document.querySelectorAll(".modal-trigger-category")
    for(let button of deleteCategory) {
        button.addEventListener("click", function(){
            document.querySelector(".modal-footer-category a").href=`/admin/category/delete/${this.dataset.id}`
            document.querySelector(".modal-body-category").innerText = `Etes-vous sûr de vouloir supprimer cette catégorie"${this.dataset.id}"`
        })
    }
}