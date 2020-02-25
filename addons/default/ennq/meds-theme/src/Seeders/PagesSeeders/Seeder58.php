<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder58 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Программа государственных гарантий на бесплатное мед. обслуживание';
    }

    public static function getSlug(): string
    {
        return '/doc3';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
'<div>
    <div>
        <p style="padding-bottom: 5px; text-align: center">
            <img src="/app/default/files-module/local/images/doc_page58 (1).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (2).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (3).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (4).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (5).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (6).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (7).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (8).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (9).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (10).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (11).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (12).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (13).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (14).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (15).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (16).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (17).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (18).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (19).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (20).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (21).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (22).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (23).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (24).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (25).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (26).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (27).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (28).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (29).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (30).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (31).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (32).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (33).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (34).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (35).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (36).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (37).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (38).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (39).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (40).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (41).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (42).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (43).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (44).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (45).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (46).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (47).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (48).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (49).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (50).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (51).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (52).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (53).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (54).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (55).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (56).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (57).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (58).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (59).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (60).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (61).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (62).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (63).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (64).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (65).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (66).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (67).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (68).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (69).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (70).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (71).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (72).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (73).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (74).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (75).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (76).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (77).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (78).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (79).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (80).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (81).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (82).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (83).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (84).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (85).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (86).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (87).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (88).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (89).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (90).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (91).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (92).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (93).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (94).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (95).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (96).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (97).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (98).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (99).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (100).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (101).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (102).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (103).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (104).jpg" class="resizeable" width="800px">
            <img src="/app/default/files-module/local/images/doc_page58 (105).jpg" class="resizeable" width="800px">
        </p>
    </div>
</div>';
    }
}
