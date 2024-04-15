describe('Rock, Paper, Scissors Game', () => {
  beforeEach(() => {
      // Assuming your game is served on localhost; adjust the URL as needed.
      cy.visit('RPS.html');
  });

  it('should display Rock as the user option when the Rock button is clicked', () => {
      cy.get('#Rock').click();
      cy.get('#user-option').should('have.text', 'Rock');
  });

  it('should display Paper as the user option when the Paper button is clicked', () => {
      cy.get('#Paper').click();
      cy.get('#user-option').should('have.text', 'Paper');
  });

  it('should display Scissors as the user option when the Scissors button is clicked', () => {
      cy.get('#Scissors').click();
      cy.get('#user-option').should('have.text', 'Scissors');
  });

  // Optionally, test for the result text being one of the expected outcomes
  it('should display a valid result after a button is clicked', () => {
      const outcomes = ["It is a tie!!", "You win!!", "You lose!!"];
      cy.get('#Rock').click(); // Example with Rock; repeat for Paper and Scissors as needed
      cy.get('#Result').then(($result) => {
          const resultText = $result.text();
          expect(outcomes).to.include(resultText);
      });
  });
});
