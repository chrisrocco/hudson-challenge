<?php


namespace App\Services;

use App\StudyGene;
use App\UserFeed;
use App\UserGene;

class FeedService {

    public function addToFeeds (StudyGene $geneInfo) {
        if ( $this->validateOddsRatio($geneInfo->odds_ratio) === false ) {
            return;
        }
        $study = $geneInfo->study()->first();

        $userGenes = UserGene::query()
            ->where('gene_id', '=', $geneInfo->gene_id)
            ->where('allele', '=', strtoupper($geneInfo->allele))
            ->get();

        var_dump($userGenes);

        foreach ($userGenes as $userGene) {
            $user = $userGene->user()->first();
            UserFeed::create([
                'user_id' => $user->getKey(),
                'study_id' => $study->getKey(),
                'read' => false,
            ]);
        }
    }

    private function validateOddsRatio($ratio) {
        //Maybe do something here later
        return true;
    }

    public function __construct() {}
}