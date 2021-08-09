// Car mileage = No. of Kms/ Quantity Of Fuel Used

let used_hour = 0
let used_km = 0
let fuel_rate = 107.83

let average = (used_km, filled_fule) => {
    return used_km / filled_fule
}

let car_mileage = average(2, 1)


let totalOne = (used_km, car_mileage, fuel_rate) => {
    return (used_km / car_mileage) * fuel_rate
}

const total1 = totalOne(15, car_mileage, fuel_rate)
console.log("total1 = " + total1);

function calculateGrandTotal(totalOne, rent, parking) {
    return totalOne + rent + parking
}

const grandTotal = calculateGrandTotal(total1, 5000, 20)
console.log(`GrandTotal = ${grandTotal}`);