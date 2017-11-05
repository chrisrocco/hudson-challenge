<?php

use App\User;
use Illuminate\Support\Facades\DB;

Route::get( "/profile", function() {

    $user = User::first();

    $feed =
        $user->feed()
        ->with(['study','study.phenotype'])
        ->get();

    $genes = $user->genes()->with('studies.phenotype')->get();

    $traits = DB::select("
            SELECT traits.* FROM users, users_genes, traits, studies_genes, studies, genes
            WHERE users.id = users_genes.user_id
                AND genes.id = users_genes.gene_id
                AND genes.id = studies_genes.gene_id
                AND studies.id = studies_genes.study_id
                AND traits.id = studies.trait_id
            ")->toArray();

    return view("pages.profile", [
        "user" => $user,
        "traits" => $traits,
        "feed" => $feed,
        "genes" => $genes
    ]);

})->name("profile");

Route::get( "/home", function() {
    return view("pages.home");
})->name("home");

Route::get('/', function () {
    return redirect('home');
});

// matched because of your ...