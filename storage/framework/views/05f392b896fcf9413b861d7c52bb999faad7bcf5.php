
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.brand h1 {
    font-size: 1.8em;
}

.brand h6 {
    font-size: 0.8em;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.net-banking {
    background-color: #4a90e2;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.call {
    background-color: #28a745;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
}

.main {
    padding: 20px;
}

.hero {
    margin-bottom: 40px;
}

.hero h1 {
    font-size: 2.5em;
}

.hero h5 {
    font-size: 1em;
    color: #666;
    margin-top: 10px;
}

.search-criteria {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search-criteria h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.form-container label {
    font-weight: bold;
    margin-bottom: 5px;
}

.form-container input[type="text"],
.form-container input[type="number"],
.form-container input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-container button {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.note {
    margin-top: 40px;
}

.note h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.note ul {
    list-style: disc;
    margin-left: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

main {
    display: flex;
    padding: 2rem;
    margin: 2rem;
}

form div {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
}
form div div {
    display: flex;
    flex-direction: column;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Banking Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="brand">
                <h1>SHIVALIK</h1>
                <h6>Shivalik small finance bank</h6>
            </div>
            <nav>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Products & Services</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#" class="net-banking">Net Banking Login</a></li>
                    <li><span class="call"><i class="icon-call"></i>1800-202-5333</span></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="">
            <section class="hero">
                <h1>Unclaimed Deposits / Inoperative Accounts</h1>
                <h5>Unclaimed Deposits / Inoperative Accounts: Accounts that are not operated for ten years or more</h5>
            </section>

            <section class="search-criteria">
                <h2>Search Criteria</h2>
                <div class="form-container">
                    <form id="my-form">
                        <div>
                            <div>
                                <label for="fullName">Customer's Name</label>
                               <h1> <?php echo e($products->customerName); ?><h1>
                            </div>

                            <div>
                                <label for="address">Address</label>
                                <h1><?php echo e($products->address); ?></h1>
                            </div>

                            <div>
                                <label for="status">STATUS</label>
                                <h1><?php echo e($products->status); ?></h1>
                            </div>

                            <div>
                                <label for="telephoneNumber">Telephone No.</label>
                                <input type="tel" id="telephoneNumber" name="telephoneNumber"
                                    placeholder="Enter Your Telephone Number" required>
                            </div>

                            <div>
                                <label for="pinCode">PIN Code</label>
                                <input type="text" id="pinCode" name="pinCode" placeholder="Enter Your PIN Code"
                                    required>
                            </div>

                        </div>
                        <button type="submit" id="submit-btn">Submit</button>
                        <button type="reset" id="reset-btn">Reset</button>
                    </form>

                </div>
            </section>

            <section class="note">
                <h2>Note:</h2>
                <ul>
                    <li>Fields marked with *(asterisk) are mandatory.</li>
                    <li>Records displayed would be based on the search criteria and match found as per records in the
                        bank database.</li>
                    <li>If your name is matching with the data available in the list, to claim the unclaimed deposits
                        please visit SHIVALIK SMALL FINANCE BANK branch with the requisite KYC documents.</li>
                </ul>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Shivalik Small Finance Bank. All rights reserved.</p>
        </div>
    </footer>

   
</body>

</html><?php /**PATH C:\xampp\htdocs\Shivalik\resources\views/show.blade.php ENDPATH**/ ?>