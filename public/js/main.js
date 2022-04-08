const list_of_pets = document.querySelectorAll(".js--dashboardPetCard")

const list_of_filters = document.querySelectorAll(".js--dashboardFilter")


for (let i = 0; i < list_of_filters.length; i++) {
    list_of_filters[i].checked = true


    list_of_filters[i].addEventListener("change", () => {
        if (list_of_filters[i].checked){

            for (let j = 0; j < list_of_pets.length; j++) {

                if(list_of_pets[j].dataset.typeOfPet === list_of_filters[i].dataset.type){
                    list_of_pets[j].style.display = 'inline';
                };
            };
        } else{
            for (let j = 0; j < list_of_pets.length; j++) {
                if(list_of_pets[j].dataset.typeOfPet === list_of_filters[i].dataset.type){
                    list_of_pets[j].style.display = 'none';
                };
            };
        }
    })
}

