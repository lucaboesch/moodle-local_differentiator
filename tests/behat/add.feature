@javascript @local @local_differentiator
Feature: Access differentiator and add a learning goal.

  @javascript
  Scenario: Access a differentiator and add a learning goal
    Given I log in as "admin"
    And I am on the "Differentiator" "local_differentiator > Differentiator" page
    And I press "Add a new goal"
    And I set the field with xpath "//div[@class='learninggoals-edit-add-form']//input[@type='text']" to "Learning goal 1 (en)"
    And I set the field with xpath "//p[2]//input[@type='text'][4]" to "Quentin Tarantino films"
    And I press "Save"
    Then I should see "Learning goal 1 (en)"
    And I should see "Students will remember the big idea of the Quentin Tarantino films using a textbook and create an essay in groups of one."
