using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Hacker : MonoBehaviour {

    // Use this for initialization
    void Start() {
        ShowMainMenu("Hello Ben");
    }
	void ShowMainMenu (string greeting) {
        Terminal.ClearScreen();
        Terminal.WriteLine(greeting);
        Terminal.WriteLine("###Bitcoin BOT V4 2017 ###");
        Terminal.WriteLine("#Select Target in 30seconds#");
        Terminal.WriteLine("Press 147 for K.F.C.");
        Terminal.WriteLine("Press 258 for F.B.I.");
        Terminal.WriteLine("Press 369 for The Pentagon");
    }
	// Update is called once per frame
	void Update () {
		
	}
}
