@javascript @local @local_differentiator
Feature: Access differentiator and add a learning goal, then delete it.
  In order to use learning goals written with the differentiator
  As a teacher
  I need to be able to add and delete learning goals.

  @javascript
  Scenario: Access a differentiator and add a learning goal, then delete it
    Given I log in as "admin"
    And I am on the "Differentiator" "local_differentiator > Differentiator" page
    And I should see "Add a new goal"
    And I follow "Add a new goal"
    And I set the field with xpath "//div[@class='learninggoals-edit-add-form']//input[@type='text']" to "Learning goal 1 (en)"
    And I set the field with xpath "//p[2]//input[@type='text'][4]" to "Quentin Tarantino films"
    And I press "Save"
    And I should see "Learning goal 1 (en)"
    And I should see "Students will remember the big idea of the Quentin Tarantino films using a textbook and create an essay in groups of one."
    When I follow "Delete"
    Then I should see "Do you really want to delete the learning goal \"Learning goal 1 (en)\"?"
    And I press "Cancel"
    And I should see "Learning goal 1 (en)"
    And I follow "Delete"
    And I press "Confirm delete"
    And I should see "Add a new goal"
    And I should not see "Learning goal 1 (en)"
    And I should see "There are no goals to show"
