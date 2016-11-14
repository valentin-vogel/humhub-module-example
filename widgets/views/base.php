<?php
use yii\helpers\Html;
use yii\helpers\Url;
use humhub\modules\meTicket\statics\MeTicketConstants;

?>

<div class="panel panel-default panel-ticket">
    
    <div class="panel-heading">
        <strong><?php echo Yii::t('MeTicketModule.base', 'myTicketWidgetHeadline'); ?></strong>
        <ul class="nav nav-pills preferences" style="right:5px;top:5px;">
            <li>
                <?php echo Html::a(
                    '',
                    Url::toRoute('/meTicket/list/reload-personal-issues'),
                    [
                        'class' => 'fa fa-refresh tt',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'top',
                        'title' => Yii::t('MeTicketModule.base', 'refresh')
                    ]
                ); ?>
            </li>
        </ul>
    </div>

    <div id="myTicketContent">
        <div class="list-group">
            <?php
            foreach ($issues as $issue) {
                if ($issue->issue_service === MeTicketConstants::JIRA_ISSUE_SERVICE) {
                    echo Html::a(
                        Html::tag(
                            'i',
                            '',
                            [
                                'class' => 'fa fa-bug'
                            ]
                        ) . '#' . $issue->issue_key . ' ' . Html::tag(
                            'br',
                            ''
                        ) . $issue->content,
                        $issue->getIssueUrl(),
                        [
                            'class' => 'list-group-item',
                            'target' => '_blank'
                        ]
                    );
                } else {
                    echo Html::a(
                        Html::tag(
                            'i',
                            '',
                            [
                                'class' => 'fa fa-bug'
                            ]
                        ) . '#' . $issue->issue_key . '' . Html::tag(
                            'br',
                            ''
                        ) . $issue->content,
                        $issue->getIssueUrl(),
                        [
                            'class' => 'list-group-item',
                            'target' => '_blank'
                        ]
                    );
                }
            }
            ?>
        </div>
    </div>
</div>
