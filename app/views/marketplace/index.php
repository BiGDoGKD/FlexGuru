<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/marketplace/includes/header.php';
?>
<div class="market">
    <div class="subject-line">
        <ul class="subtitle-2">
            <li>Mathematics</li>
            <li>Science</li>
            <li>Technology</li>
            <li>Web Development</li>
            <li>Machine Learning</li>
            <li>UI/UX Designing</li>
            <li>History</li>
        </ul>
    </div>

    <div class="filtering-options">
        <div class="heading">
            <h4>All Services</h4>
        </div>
        <div class="filter-options">
            <div class="select">
                <select name="education" id="">
                    <option value="">Education Level</option>
                </select>
            </div>
            <div class="select">
                <select name="subject" id="">
                    <option value="">Subject</option>
                </select>
            </div>
            <div class="select">
                <select name="budget" id="">
                    <option value="">Budget</option>
                </select>
            </div>
            <div class="select">
                <select name="level" id="">
                    <option value="">Tutor Level</option>
                </select>
            </div>
        </div>
        <div class="services-details">
            <div class="available-services"><span class="subtitle-2 gray">789 services available</span></div>
            <div class="sort-by"><span class="subtitle-2 gray">Sort by: <span class="subtitle-3 dark">Price: low to high</span></span></div>
        </div>
    </div>
    <div class="marketplace">
        <?php
        for ($i = 0; $i < 30; $i++) {
            include APPROOT . './views/marketplace/components/gigcard.php';
        }
        ?>
    </div>
</div>
<style>
    .market {
        display: flex;
        width: 100%;
        flex-direction: column;
        justify-content: center;
        margin-bottom: 50px;
    }

    .marketplace {
        margin: auto;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .subject-line {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 50px;
        justify-content: center;
        align-items: center;
        border: 0;
        border-top: 1px solid #acacac;
        border-bottom: 1px solid #acacac;
        margin: 30px 0 10px 0;
    }

    .filtering-options {
        display: flex;
        flex-direction: column;
    }

    .filtering-options .filter-options {
        /* width: 35%; */
        margin: 20px 0;
        display: flex;
        flex-direction: row;
        /* justify-content: space-between; */
    }

    .filtering-options .filter-options .select {
        cursor: pointer;
        width: 150px;
        height: 30px;
        border-radius: 5px;
        border: 1px solid #c4c4c4;
        padding: 0 7px;
        margin: 0 20px 0 0;
    }

    .filtering-options .filter-options select {
        outline: none;
        cursor: pointer;
        width: 150px;
        height: 30px;
        border-radius: 5px;
        font-family: 'Poppins';
        font-size: 12px;
        font-weight: 600;
        border: 0;
        padding: 0 5px 0 7px;
        margin: 0 20px 0 0;
        /* appearance: none; */
    }

    .filtering-options .filter-options select option {
        width: 157px;
        padding: 0 7px 0 0;
    }

    .filtering-options .services-details {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .subject-line ul {
        display: flex;
        flex-direction: row;
        width: 100%;
        list-style: none;
        justify-content: space-around;
    }

    .subject-line ul li {
        cursor: pointer;
        color: var(--gray);
        transition: 0.3s ease;
    }

    .subject-line ul li:hover {
        color: var(--primary);
    }
</style>

<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>