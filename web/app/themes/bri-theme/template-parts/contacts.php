<?php 
    $contacts = get_post(68);
    $phone_symbols = array(" ", "(", ")","-");
?>

<div class="contacts__box">
    <div class="contacts__item">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
        d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
        stroke="#222222" stroke-width="1.5" stroke-miterlimit="10" />
        <path d="M10 10H14.375" stroke="#222222" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
        <path d="M13.0938 13.0938L10 10" stroke="#222222" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    </svg>
    <span><?php echo $contacts->con_work_hours_1; ?></span> |
    <span><?php echo $contacts->con_work_hours_2; ?> <?php echo $contacts->con_work_hours_3; ?></span>
    </div>
    <div class="contacts__item">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
            d="M7.22656 9.75015C7.8697 11.0783 8.94366 12.1495 10.2734 12.7892C10.3715 12.8357 10.48 12.8558 10.5882 12.8475C10.6965 12.8393 10.8007 12.8031 10.8906 12.7423L12.8437 11.4376C12.93 11.3791 13.0298 11.3434 13.1336 11.3338C13.2374 11.3243 13.342 11.3412 13.4375 11.383L17.0938 12.9533C17.2187 13.0053 17.3231 13.0969 17.3909 13.2141C17.4586 13.3313 17.486 13.4675 17.4688 13.6017C17.3529 14.5062 16.9114 15.3375 16.2269 15.94C15.5424 16.5425 14.6619 16.8749 13.75 16.8751C10.9321 16.8751 8.22956 15.7557 6.23699 13.7632C4.24442 11.7706 3.125 9.06807 3.125 6.25015C3.12521 5.33827 3.45767 4.45771 4.06018 3.77324C4.66269 3.08877 5.49395 2.64728 6.39844 2.5314C6.53269 2.51415 6.66888 2.54152 6.78605 2.60928C6.90322 2.67704 6.99487 2.78144 7.04687 2.9064L8.61719 6.57046C8.65802 6.66448 8.67511 6.7671 8.66693 6.86928C8.65876 6.97146 8.62558 7.07006 8.57031 7.1564L7.26562 9.14077C7.20754 9.23052 7.17345 9.33368 7.16661 9.44037C7.15977 9.54705 7.18041 9.65371 7.22656 9.75015V9.75015Z"
            stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <a class="contacts__phone" href="tel:<?php echo str_replace($phone_symbols, "", $contacts->con_phone_1);?>">
            <?php echo $contacts->con_phone_1; ?>
        </a> 
        <a class="contacts__phone" href="tel:<?php echo str_replace($phone_symbols, "", $contacts->con_phone_2);?>">
            <?php echo $contacts->con_phone_2; ?>
        </a>
    </div>
    <div class="contacts__item">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
        d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
        stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path
        d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
        stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>

    <span><?php echo $contacts->con_adress; ?></span>
    </div>
    <div class="contacts__item">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
        d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
        stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path
        d="M14.1484 16.2502C12.7563 17.1745 11.0954 17.6074 9.42927 17.4802C7.76311 17.353 6.18713 16.6731 4.95141 15.5483C3.71569 14.4234 2.891 12.9182 2.6082 11.2713C2.3254 9.62435 2.60069 7.93018 3.39039 6.45755C4.18008 4.98492 5.43895 3.81819 6.96725 3.14249C8.49554 2.46678 10.2057 2.32082 11.8264 2.72774C13.4471 3.13467 14.8855 4.07118 15.9134 5.38868C16.9412 6.70617 17.4996 8.32919 17.5 10.0002C17.5 11.7268 16.875 13.1252 15.3125 13.1252C13.75 13.1252 13.125 11.7268 13.125 10.0002V6.87519"
        stroke="#222222" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <a href="mailto:<?php echo $contacts->con_email; ?>">
        <span><?php echo $contacts->con_email; ?></span>
    </a>
    </div>
</div>