<?php
//contact manager

$contacts = [];

function addContact(array &$contacts, string $name, string $email, int $phone):void
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
    //array_push($contacts[] = ['name' => $name, 'email'=> $email, 'phone' => $phone]);
}
 function displaycontact(array $contacts):void 
 {
    if(empty($contacts)){
        echo "N contacts Available.\n";
    } else{
        foreach($contacts as $contact){
            
        }
    }
 }


?>