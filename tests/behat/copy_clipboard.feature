@javascript @local @local_differentiator
Feature: Access differentiator and add a learning goal, then copy it to the clickboard.
  In order to use  learning goals written with the differentiator
  As a teacher
  I need to be able to copy a learning goal to the clipboard.

  @javascript
  Scenario: Access a differentiator and add a learning goal, then copy it to the clipboard
    Given I log in as "admin"
    And I am on the "Differentiator" "local_differentiator > Differentiator" page
    And I should see "Add a new goal"
    And I follow "Add a new goal"
    And I set the field with xpath "//div[@class='learninggoals-edit-add-form']//input[@type='text']" to "Learning goal 1 (en)"
    And I set the field with xpath "//p[2]//input[@type='text'][4]" to "Quentin Tarantino films"
    And I press "Save"
    And I should see "Learning goal 1 (en)"
    And I should see "Students will remember the big idea of the Quentin Tarantino films using a textbook and create an essay in groups of one."
    When I follow "Copy to clipboard"
    Then I should see "Copied to clipboard"
