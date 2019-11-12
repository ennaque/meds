<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\MedsPostRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MedsPostRepository extends PostRepository implements MedsPostRepositoryInterface
{
    public const URL_SLUG = '/posts/';

    /**
     * @param string $needle
     * @param int $offsetFrom
     * @param int $offsetTo
     * @return mixed
     */
    public function searchLikeContentOrTitle(string $needle, int $offsetFrom = 0, int $offsetTo = 10000)
    {
        return DB::select('
            SELECT * FROM `default_posts_posts`
                JOIN `default_posts_default_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts`.`id`
                JOIN `default_posts_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts_translations`.`entry_id`
                WHERE 
                    MATCH(`default_posts_default_posts_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE) 
                OR
                    MATCH(`default_posts_posts_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE)
                    LIMIT ' . $offsetFrom . ', ' . $offsetTo . ';
                    ');
    }

    public function countByNeedle(string $needle)
    {
        return DB::select('
            SELECT COUNT(*) AS total FROM `default_posts_posts`
                JOIN `default_posts_default_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts`.`id`
                JOIN `default_posts_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts_translations`.`entry_id`
                WHERE 
                    MATCH(`default_posts_default_posts_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE) 
                OR
                    MATCH(`default_posts_posts_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE);
                    ')[0];
    }
}
