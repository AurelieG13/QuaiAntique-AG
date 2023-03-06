window.onload = () => {
    let deleteUser = document.querySelectorAll(".modal-trigger-user")
    
    for(let button1 of deleteUser) {
        button1.addEventListener("click", function(){
            document.querySelector(".modal-footer-user a").href=`/admin/user/delete/${this.dataset.id}`
            document.querySelector(".modal-body-user").innerText = `Confirmez-vous la suppression de l'utilisateur? `
        })
    }

    let deleteDish = document.querySelectorAll(".modal-trigger-dish")
    
    for(let button2 of deleteDish) {
        button2.addEventListener("click", function(){
            document.querySelector(".modal-footer-dish a").href=`/admin/dish/delete/${this.dataset.id}`
            document.querySelector(".modal-body-dish").innerText = `Confirmez-vous la suppression du plat? `
        })
    }

    let deleteCategory = document.querySelectorAll(".modal-trigger-category")
    
    for(let button3 of deleteCategory) {
        button3.addEventListener("click", function(){
            document.querySelector(".modal-footer-category a").href=`/admin/category/delete/${this.dataset.id}`
            document.querySelector(".modal-body-category").innerText = `Confirmez-vous la suppression de la catégorie? `
        })
    }

    let deleteFormule = document.querySelectorAll(".modal-trigger-formule")
    
    for(let button4 of deleteFormule) {
        button4.addEventListener("click", function(){
            document.querySelector(".modal-footer-formule a").href=`/admin/formule/delete/${this.dataset.id}`
            document.querySelector(".modal-body-formule").innerText = `Confirmez-vous la suppression de la formule? `
        })
    }
}