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

    let deleteMenu = document.querySelectorAll(".modal-trigger-menu")
    
    for(let button5 of deleteMenu) {
        button5.addEventListener("click", function(){
            document.querySelector(".modal-footer-menu a").href=`/admin/menu/delete/${this.dataset.id}`
            document.querySelector(".modal-body-menu").innerText = `Confirmez-vous la suppression du menu? `
        })
    }

    let deleteAllergy = document.querySelectorAll(".modal-trigger-allergy")
    
    for(let button6 of deleteAllergy) {
        button6.addEventListener("click", function(){
            document.querySelector(".modal-footer-allergy a").href=`/admin/allergy/delete/${this.dataset.id}`
            document.querySelector(".modal-body-allergy").innerText = `Confirmez-vous la suppression de cette allergie? `
        })
    }
}