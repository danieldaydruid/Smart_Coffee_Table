using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class return_to_main : MonoBehaviour {
	public void PauseGame() {
		SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex - 1);
	}
}
