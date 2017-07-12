<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}

$members = get_members();

for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i]).'<br />';
}

?>