<?php
$releases = [
  //---------------------------------------------------------------------------
  [
    'version' => '4.0.1',
    'date' => '2024-11-11',
    'info' => '',
    'bugfixes' => [
      [ 'summary' => 'Fixed global font option not working', 'issue' => 'https://github.com/glewe/teamcal-neo/issues/9' ],
      [ 'summary' => 'Fixed horizontal scroll on mobile devices', 'issue' => '' ],
      [ 'summary' => 'Fixed users and archive_users table config', 'issue' => '' ],
      [ 'summary' => 'Fixed config page alert message', 'issue' => '' ],
      [ 'summary' => 'Fixed version compare script', 'issue' => '' ],
    ],
    'features' => [
    ],
    'improvements' => [
      [ 'summary' => 'Updated Google Analytics script', 'issue' => '' ],
    ],
    'removals' => [
    ],
  ],
  //---------------------------------------------------------------------------
  [
    'version' => '4.0.0',
    'date' => '2024-09-19',
    'info' => 'This is a new major release of TeamCal Neo Basic derived from the full version of TeamCal Neo.',
    'bugfixes' => [
    ],
    'features' => [
    ],
    'improvements' => [
    ],
    'removals' => [
    ],
  ],
];
?>
<!-- Release Info -->
<ul class="timeline">
  <?php foreach ($releases as $release) { ?>
    <li>
      <div class="card mb-3">
        <div class="card-header"><i class="bi-box me-3"></i>Release <?= $release['version'] ?><span class="float-end"><i class="bi-calendar me-3"></i><?= $release['date'] ?></span></div>
        <div class="card-body">

          <?php if (strlen($release['info'])) { ?>
            <p><?= $release['info'] ?></p>
          <?php } ?>

          <?php if (count($release['bugfixes'])) { ?>
            <h6><?= $LANG['about_bugfixes'] ?></h6>
            <ul>
              <?php foreach ($release['bugfixes'] as $bugfix) { ?>
                <li><?= $bugfix['summary'] ?><?= (strlen($bugfix['issue']) ? ' ( <a href="' . $bugfix['issue'] . '" target="_blank"><i class="bi-box-arrow-up-right me-1"></i>Issue</a> )' : '') ?></li>
              <?php } ?>
            </ul>
          <?php } ?>

          <?php if (count($release['improvements'])) { ?>
            <h6><?= $LANG['about_improvements'] ?></h6>
            <ul>
              <?php foreach ($release['improvements'] as $improvement) { ?>
                <li><?= $improvement['summary'] ?><?= (strlen($improvement['issue']) ? ' ( <a href="' . $improvement['issue'] . '" target="_blank"><i class="bi-box-arrow-up-right me-1"></i>Issue</a> )' : '') ?></li>
              <?php } ?>
            </ul>
          <?php } ?>

          <?php if (count($release['features'])) { ?>
            <h6><?= $LANG['about_features_new'] ?></h6>
            <ul>
              <?php foreach ($release['features'] as $feature) { ?>
                <li><?= $feature['summary'] ?><?= (strlen($feature['issue']) ? ' ( <a href="' . $feature['issue'] . '" target="_blank"><i class="bi-box-arrow-up-right me-1"></i>Issue</a> )' : '') ?></li>
              <?php } ?>
            </ul>
          <?php } ?>

          <?php if (count($release['removals'])) { ?>
            <h6><?= $LANG['about_features_retired'] ?></h6>
            <ul>
              <?php foreach ($release['removals'] as $removal) { ?>
                <li><?= $removal['summary'] ?><?= (strlen($removal['issue']) ? ' ( <a href="' . $removal['issue'] . '" target="_blank"><i class="bi-box-arrow-up-right me-1"></i>Issue</a> )' : '') ?></li>
              <?php } ?>
            </ul>
          <?php } ?>

        </div>
      </div>
    </li>
  <?php } ?>
</ul>
<!-- End Release Info -->
