
function availableCars(car){
    let quantity = 0;

    switch(car){
        case "تويوتا":
            quantity = 3;
            break;

        case "نيسان":
            quantity = 2;
            break;

        case "مرسيدس":
            quantity = 1;
            break;

        default:
            quantity = 0;
    }

    return quantity;
}

function loopRunner(){

    let animals = ["خروف","دجاجه","بقره","حصان"];

    animals.forEach( function(element){
        console.log(element);
    })

}
