<?php


namespace App\Services;

use App\Gene;
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

        foreach ($userGenes as $userGene) {
            $user = $userGene->user()->first();
            UserFeed::create([
                'user_id' => $user->getKey(),
                'study_id' => $study->getKey(),
                'read' => false,
            ]);
        }
    }

    public function checkAvailableStudies (UserGene $userGene) {
        $studyGenes = StudyGene::query()
            ->where('gene_id', '=', $userGene->gene_id)
            ->where('allele', '=', $userGene->allele)
            ->get();
        foreach ($studyGenes as $studyGene) {
            UserFeed::create([
                'user_id' => $userGene->user_id,
                'study_id' => $studyGene->study_id,
                'read' => false,
            ]);
        }
    }

    private function validateOddsRatio($ratio) {
//        if ($ratio >= 0.75 && $ratio <= 1.5) {
//            return false;
//        }
        return true;
    }

    public function __construct() {}
}