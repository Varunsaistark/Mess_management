let bill = document.getElementById('billAmount');



function calculate() {
    let to = document.getElementById('amount').textContent;
    let b = parseInt(bill.value);
    if (isNaN(b)) {
        document.getElementById('errorMessage').textContent = "Enter a valid amount"
    } else {
        let total = parseInt(to);

        total = b + total;
        if (total > 3000) {
            document.getElementById('amount').style.color = 'red';
        } else {
            document.getElementById('amount').style.color = '#264fa2';
        }
        document.getElementById('amount').textContent = total;
        document.getElementById('billAmount').value = null;
    }
}

function refresh() {
    document.getElementById('amount').textContent = 0;
    document.getElementById('amount').style.color = '#264fa2';
    document.getElementById('billAmount').value = null;
}