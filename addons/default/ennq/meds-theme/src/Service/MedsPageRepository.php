<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageRepository;
use Ennq\MedsTheme\Lib\MedsPageRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MedsPageRepository extends PageRepository implements MedsPageRepositoryInterface
{
    /**
     * @param string $needle
     * @param int $offsetFrom
     * @param int $offsetTo
     * @return mixed
     */
    public function searchLikeContentOrTitle(string $needle, int $offsetFrom = 0, int $offsetTo = 10000)
    {
        return DB::select('
                SELECT * FROM `default_pages_pages`
                    JOIN `default_pages_default_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages`.`id`
                    JOIN `default_pages_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages_translations`.`entry_id`
                WHERE
                    MATCH(`default_pages_default_pages_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE)
                OR
                    MATCH(`default_pages_pages_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE)
                LIMIT ' . $offsetFrom . ', ' . $offsetTo . ';    
                ');
    }

    /**
     * @param string $needle
     * @return mixed
     */
    public function countByNeedle(string $needle)
    {
        return DB::select('
                SELECT COUNT(*) AS total FROM `default_pages_pages`
                    JOIN `default_pages_default_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages`.`id`
                    JOIN `default_pages_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages_translations`.`entry_id`
                WHERE
                    MATCH(`default_pages_default_pages_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE)
                OR
                    MATCH(`default_pages_pages_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE);    
                ')[0];
    }
}
