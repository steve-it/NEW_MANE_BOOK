<?php
/*__rester vrai__*/
 Broadcast::channel("\101\x70\160\56\125\163\x65\x72\56\173\x69\x64\175", function ($user, $id) { return (int) $user->id === (int) $id; });
