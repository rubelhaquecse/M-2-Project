<?php 
    $contact = [];

    // add contact------

    function addContact(array &$contacts, string $name, string $email, string $phone): void {

        $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
    
    }
    
    // display contacts--------
    function displayContacts(array $contacts): void{
        if(empty($contacts)){
            echo "No contacts available.\n";
        }else{
            foreach($contacts as $contact){
                echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
            }
        }
    }

    while(true){
        echo "\n Contact Management Menu\n";
        echo "1. Add Contact\n";
        echo "2. View Contacts\n";
        echo "3. Exit\n";

        $choice = (int)readline("Choose an option: ");

        if($choice === 1){
            $name = readline("enter name: ");
            $email = readline("enter email: ");
            $phone = readline("enter phone: ");
            addContact($contact, $name, $email, $phone);
            echo "$name added successfully.\n";

        }elseif($choice === 2){
            displayContacts($contact);

        }elseif($choice == 3){
            echo "Exiting....\n";
            break;

        }else{
            echo "invalid choice";

        }
    }

?>